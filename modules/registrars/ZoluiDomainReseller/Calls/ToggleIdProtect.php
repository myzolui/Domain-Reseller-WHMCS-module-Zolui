<?php
namespace ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Core\Call;

/**
 * Description of GetNameServers
 *
 * @author inbs
 */
class ToggleIdProtect extends Call
{
    public $action = "domains/:domain/protectid";
    
    public $type = parent::TYPE_POST;
}