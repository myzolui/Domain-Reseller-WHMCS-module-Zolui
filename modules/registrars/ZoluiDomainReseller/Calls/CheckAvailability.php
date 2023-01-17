<?php
namespace ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Core\Call;

/**
 * Description of CheckAvailability
 *
 * @author inbs
 */
class CheckAvailability extends Call
{
    public $action = "domains/lookup";
    
    public $type = parent::TYPE_POST;
}