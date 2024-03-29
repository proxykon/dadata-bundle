<?php

declare(strict_types=1);

namespace Velhron\DadataBundle\Tests\DependencyInjection;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Yaml\Yaml;
use Velhron\DadataBundle\DependencyInjection\VelhronDadataExtension;

class VelhronDadataExtensionTest extends TestCase
{
    public function testRegister(): void
    {
        $config = Yaml::parse(file_get_contents(__DIR__.'/config.yaml'));

        $containerBuilder = new ContainerBuilder();
        $containerBuilder->setParameter('kernel.debug', true);

        $extension = new VelhronDadataExtension();
        $extension->load($config, $containerBuilder);

        $this->assertSame('token', $containerBuilder->getParameter('proxykon_dadata.token'));
        $this->assertSame('secret', $containerBuilder->getParameter('proxykon_dadata.secret'));
        $this->assertSame('https://example.com/general', $containerBuilder->getParameter('proxykon_dadata.base_general_url'));
        $this->assertSame('https://example.com/cleaner', $containerBuilder->getParameter('proxykon_dadata.base_cleaner_url'));
        $this->assertSame('https://example.com/suggetions', $containerBuilder->getParameter('proxykon_dadata.base_suggestions_url'));
    }

    public function testRegisterWithDefaults(): void
    {
        /** @var ContainerBuilder|MockObject $containerBuilder */
        $containerBuilder = $this->getMockBuilder(ContainerBuilder::class)->disableOriginalConstructor()->getMock();

        $containerBuilder
            ->expects($this->exactly(5))
            ->method('setParameter')
            ->withConsecutive(
                ['proxykon_dadata.token', 'token12345'],
                ['proxykon_dadata.secret', 'secret12345'],
                ['proxykon_dadata.base_general_url', 'https://dadata.ru/api/v2'],
                ['proxykon_dadata.base_cleaner_url', 'https://cleaner.dadata.ru/api/v1/clean'],
                ['proxykon_dadata.base_suggestions_url', 'https://suggestions.dadata.ru/suggestions/api/4_1/rs']
            );

        $config = [
            'proxykon_dadata' => [
                'token' => 'token12345',
                'secret' => 'secret12345',
            ],
        ];

        $extension = new VelhronDadataExtension();
        $extension->load($config, $containerBuilder);
    }
}
