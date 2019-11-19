<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SignInFrequencySessionControl File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* SignInFrequencySessionControl class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SignInFrequencySessionControl extends ConditionalAccessSessionControl
{
    /**
    * Gets the value
    *
    * @return int The value
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
    *
    * @param int $val The value of the value
    *
    * @return SignInFrequencySessionControl
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }

    /**
    * Gets the type
    *
    * @return SigninFrequencyType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "Microsoft\Graph\Beta\Model\SigninFrequencyType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new SigninFrequencyType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    *
    * @param SigninFrequencyType $val The value to assign to the type
    *
    * @return SignInFrequencySessionControl The SignInFrequencySessionControl
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}