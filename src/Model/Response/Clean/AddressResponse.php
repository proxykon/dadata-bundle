<?php

declare(strict_types=1);

namespace Velhron\DadataBundle\Model\Response\Clean;

use Velhron\DadataBundle\Traits\Address;

class AddressResponse extends CleanResponse
{
    use Address;

    /**
     * @var int Код пригодности к рассылке
     *
     * 0  - Да (Пригоден для почтовой рассылки)
     * 10 - Под вопросом (Дома нет в ФИАС)
     * 5  - Под вопросом (Нет квартиры. Подходит для юридических лиц или частных владений)
     * 8  - Под вопросом (До почтового отделения — абонентский ящик или адрес до востребования. Подходит для писем, но не для курьерской доставки)
     * 9  - Под вопросом (Сначала проверьте, правильно ли Дадата разобрала исходный адрес)
     * 1  - Нет (Нет региона)
     * 2  - Нет (Нет города)
     * 3  - Нет (Нет улицы)
     * 4  - Нет (Нет дома)
     * 6  - Нет (Адрес неполный)
     * 7  - Нет (Иностранный адрес)
     */
    public $qcComplete;

    /**
     * @var int Признак наличия дома в ФИАС
     */
    public $qcHouse;

    /**
     * @var string Нераспознанная часть адреса
     */
    public $unparsedParts;
    public $flatCadnum;
    public $houseCadnum;
}
