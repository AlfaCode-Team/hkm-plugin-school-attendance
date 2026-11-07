# hkm-plugin-school-attendance

> Solves **`school.attendance`** · namespace **`Plugins\SchoolAttendance\`** · on-demand GDA module
> Family: Elimu / school domain

Derives daily arrival/departure from the raw biometric scan stream; manual entry, analytics and reports.

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `SchoolAttendanceContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `attendance/ (25 files), presence_tracker.php, attendance_dash.php, api/save_arrival.php` |
| Legacy tables | `attendance, arrival_times, attendance_logs` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`
- `school.people`
- `school.classes`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["school.attendance"] }
```

```php
$svc = $container->make(\Plugins\SchoolAttendance\API\Contracts\SchoolAttendanceContract::class);
```

## Installing

```bash
hkm plugins enable SchoolAttendance <project>
```
