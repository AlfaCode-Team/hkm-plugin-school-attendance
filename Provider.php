<?php

declare(strict_types=1);

namespace Plugins\SchoolAttendance;

use AlfacodeTeam\PhpServicePlatform\Kernel\Contracts\ModuleContract;
use Plugins\SchoolAttendance\API\Contracts\SchoolAttendanceContract;
use AlfacodeTeam\PhpServicePlatform\Kernel\Container\ModuleContainer;
use AlfacodeTeam\PhpServicePlatform\Kernel\Events\EventBus;
use AlfacodeTeam\PhpServicePlatform\Kernel\Pipelines\Cli\CliPipeline;
use AlfacodeTeam\PhpServicePlatform\Kernel\Pipelines\Http\HttpPipeline;
use AlfacodeTeam\PhpServicePlatform\Kernel\Pipelines\Worker\WorkerPipeline;

/**
 * SchoolAttendance — wires the 'school.attendance' domain.
 *
 * Derives daily arrival/departure from the raw biometric scan stream; manual entry, analytics and reports.
 *
 * Keep this module focused on ONE business domain. Wire internal bindings with
 * $container->bindInternal(); publish cross-module contracts with $container->bind().
 */
final class Provider implements ModuleContract
{
    public function solves(): string
    {
        return 'school.attendance';
    }

    /** @return list<string> module DOMAINS — mirrors module.json "requires" */
    public function requires(): array
    {
        return [
            'database.management',
            'school.people',
            'school.classes',
        ];
    }

    /** @return list<class-string> */
    public function exposes(): array
    {
        return [SchoolAttendanceContract::class];
    }

    public function register(ModuleContainer $container): void
    {
        // Bind this module's services here.
    }

    public function boot(HttpPipeline $http, CliPipeline $cli, WorkerPipeline $worker, EventBus $events): void
    {
        // Register pipeline hooks / event subscriptions here.
    }
}
