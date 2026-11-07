<?php

declare(strict_types=1);

namespace Plugins\SchoolAttendance\API\Contracts;

/**
 * Published contract for `school.attendance`.
 *
 * Derives daily arrival/departure from the raw biometric scan stream; manual entry, analytics and reports.
 *
 * Legacy source : attendance/ (25 files), presence_tracker.php, attendance_dash.php, api/save_arrival.php
 * Legacy tables : attendance, arrival_times, attendance_logs
 *
 * Consumers declare `"requires": ["school.attendance"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface SchoolAttendanceContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}
