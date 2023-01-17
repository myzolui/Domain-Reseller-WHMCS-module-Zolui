<?php
namespace ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Core\Call;

/**
 * Description of RenewDomain
 *
 * @author inbs
 */
class RenewDomain extends Call
{
    public $action = "order/domains/renew";
    
    public $type = parent::TYPE_POST;
}