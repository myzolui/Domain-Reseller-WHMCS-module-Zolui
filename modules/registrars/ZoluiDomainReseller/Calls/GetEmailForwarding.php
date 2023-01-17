<?php
namespace ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Core\Call;

/**
 * Description of GetEmailForwarding
 *
 * @author inbs
 */
class GetEmailForwarding extends Call
{
    public $action = "domains/:domain/email";
    
    public $type = parent::TYPE_GET;
}