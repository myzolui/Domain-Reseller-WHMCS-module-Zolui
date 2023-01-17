<?php
namespace ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Core\Call;

/**
 * Description of GetNameServers
 *
 * @author inbs
 */
class TransferSync extends Call
{
    public $action = "domains/:domain/transfersync";
    
    public $type = parent::TYPE_POST;
}