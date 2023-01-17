<?php
namespace ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\ZoluiDomainReseller\Core\Call;

/**
 * Description of GetContactDetails
 *
 * @author inbs
 */
class GetContactDetails extends Call
{
    public $action = "domains/:domain/contact";
    
    public $type = parent::TYPE_GET;
}