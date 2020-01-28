<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppRole File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* AppRole class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AppRole extends Entity
{
    /**
    * Gets the allowedMemberTypes
    * Specifies whether this app role definition can be assigned to users and groups by setting to 'User', or to other applications (that are accessing this application in daemon service scenarios) by setting to 'Application', or to both.
    *
    * @return string The allowedMemberTypes
    */
    public function getAllowedMemberTypes()
    {
        if (array_key_exists("allowedMemberTypes", $this->_propDict)) {
            return $this->_propDict["allowedMemberTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedMemberTypes
    * Specifies whether this app role definition can be assigned to users and groups by setting to 'User', or to other applications (that are accessing this application in daemon service scenarios) by setting to 'Application', or to both.
    *
    * @param string $val The value of the allowedMemberTypes
    *
    * @return AppRole
    */
    public function setAllowedMemberTypes($val)
    {
        $this->_propDict["allowedMemberTypes"] = $val;
        return $this;
    }
    /**
    * Gets the description
    * Permission help text that appears in the admin app assignment and consent experiences.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Permission help text that appears in the admin app assignment and consent experiences.
    *
    * @param string $val The value of the description
    *
    * @return AppRole
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * Display name for the permission that appears in the admin consent and app assignment experiences.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Display name for the permission that appears in the admin consent and app assignment experiences.
    *
    * @param string $val The value of the displayName
    *
    * @return AppRole
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * Unique role identifier inside the appRoles collection. When creating a new app role, a new Guid identifier must be provided.
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Unique role identifier inside the appRoles collection. When creating a new app role, a new Guid identifier must be provided.
    *
    * @param string $val The value of the id
    *
    * @return AppRole
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the isEnabled
    * When creating or updating an app role, this must be set to true (which is the default). To delete a role, this must first be set to false.  At that point, in a subsequent call, this role may be removed.
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    * When creating or updating an app role, this must be set to true (which is the default). To delete a role, this must first be set to false.  At that point, in a subsequent call, this role may be removed.
    *
    * @param bool $val The value of the isEnabled
    *
    * @return AppRole
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the origin
    * Read-only. Specifies if the app role is defined on the Application object . Must not be included in any POST or PATCH requests.
    *
    * @return string The origin
    */
    public function getOrigin()
    {
        if (array_key_exists("origin", $this->_propDict)) {
            return $this->_propDict["origin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the origin
    * Read-only. Specifies if the app role is defined on the Application object . Must not be included in any POST or PATCH requests.
    *
    * @param string $val The value of the origin
    *
    * @return AppRole
    */
    public function setOrigin($val)
    {
        $this->_propDict["origin"] = $val;
        return $this;
    }
    /**
    * Gets the value
    * Specifies the value which will be included in the roles claim in authentication and access tokens. Must not exceed 120 characters in length. Allowed characters are : ! # $ % &amp; ' ( ) * + , - . / : ;  =  ? @ [ ] ^ + _  {  } ~, as well as characters in the ranges 0-9, A-Z and a-z. Any other character, including the space character, are not allowed.
    *
    * @return string The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * Specifies the value which will be included in the roles claim in authentication and access tokens. Must not exceed 120 characters in length. Allowed characters are : ! # $ % &amp; ' ( ) * + , - . / : ;  =  ? @ [ ] ^ + _  {  } ~, as well as characters in the ranges 0-9, A-Z and a-z. Any other character, including the space character, are not allowed.
    *
    * @param string $val The value of the value
    *
    * @return AppRole
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
