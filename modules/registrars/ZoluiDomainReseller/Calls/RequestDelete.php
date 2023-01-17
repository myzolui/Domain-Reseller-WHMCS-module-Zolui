<?php
namespace ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Core\Call;

/**
 * Description of RequestDelete
 *
 * @author inbs
 */
class RequestDelete extends Call
{
    public $action = "domains/:domain/delete";
    
    public $type = parent::TYPE_POST;
}