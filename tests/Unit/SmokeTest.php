<?php declare(strict_types=1);

namespace Stea\FacturaElectronica\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Stea\FacturaElectronica\Exceptions\FacturaElectronicaException;

final class SmokeTest extends TestCase
{
    public function test_autoload_and_base_exception_resolve(): void
    {
        $this->assertTrue(is_subclass_of(FacturaElectronicaException::class, \RuntimeException::class));
    }
}
