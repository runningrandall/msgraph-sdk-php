<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAndroidLobApp File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* ManagedAndroidLobApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ManagedAndroidLobApp extends ManagedMobileLobApp
{
    /**
    * Gets the packageId
    *
    * @return string The packageId
    */
    public function getPackageId()
    {
        if (array_key_exists("packageId", $this->_propDict)) {
            return $this->_propDict["packageId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the packageId
    *
    * @param string $val The packageId
    *
    * @return ManagedAndroidLobApp
    */
    public function setPackageId($val)
    {
        $this->_propDict["packageId"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityName
    *
    * @return string The identityName
    */
    public function getIdentityName()
    {
        if (array_key_exists("identityName", $this->_propDict)) {
            return $this->_propDict["identityName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the identityName
    *
    * @param string $val The identityName
    *
    * @return ManagedAndroidLobApp
    */
    public function setIdentityName($val)
    {
        $this->_propDict["identityName"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumSupportedOperatingSystem
    *
    * @return AndroidMinimumOperatingSystem The minimumSupportedOperatingSystem
    */
    public function getMinimumSupportedOperatingSystem()
    {
        if (array_key_exists("minimumSupportedOperatingSystem", $this->_propDict)) {
            if (is_a($this->_propDict["minimumSupportedOperatingSystem"], "Microsoft\Graph\Beta\Model\AndroidMinimumOperatingSystem")) {
                return $this->_propDict["minimumSupportedOperatingSystem"];
            } else {
                $this->_propDict["minimumSupportedOperatingSystem"] = new AndroidMinimumOperatingSystem($this->_propDict["minimumSupportedOperatingSystem"]);
                return $this->_propDict["minimumSupportedOperatingSystem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the minimumSupportedOperatingSystem
    *
    * @param AndroidMinimumOperatingSystem $val The minimumSupportedOperatingSystem
    *
    * @return ManagedAndroidLobApp
    */
    public function setMinimumSupportedOperatingSystem($val)
    {
        $this->_propDict["minimumSupportedOperatingSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the versionName
    *
    * @return string The versionName
    */
    public function getVersionName()
    {
        if (array_key_exists("versionName", $this->_propDict)) {
            return $this->_propDict["versionName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the versionName
    *
    * @param string $val The versionName
    *
    * @return ManagedAndroidLobApp
    */
    public function setVersionName($val)
    {
        $this->_propDict["versionName"] = $val;
        return $this;
    }
    
    /**
    * Gets the versionCode
    *
    * @return string The versionCode
    */
    public function getVersionCode()
    {
        if (array_key_exists("versionCode", $this->_propDict)) {
            return $this->_propDict["versionCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the versionCode
    *
    * @param string $val The versionCode
    *
    * @return ManagedAndroidLobApp
    */
    public function setVersionCode($val)
    {
        $this->_propDict["versionCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityVersion
    *
    * @return string The identityVersion
    */
    public function getIdentityVersion()
    {
        if (array_key_exists("identityVersion", $this->_propDict)) {
            return $this->_propDict["identityVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the identityVersion
    *
    * @param string $val The identityVersion
    *
    * @return ManagedAndroidLobApp
    */
    public function setIdentityVersion($val)
    {
        $this->_propDict["identityVersion"] = $val;
        return $this;
    }
    
}