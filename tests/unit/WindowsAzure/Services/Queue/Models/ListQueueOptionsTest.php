<?php

/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * PHP version 5
 *
 * @category  Microsoft
 * @package   PEAR2\Tests\Unit\WindowsAzure
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */

use PEAR2\WindowsAzure\Services\Queue\Models\ListQueueOptions;
use PEAR2\Tests\Unit\TestResources;

/**
 * Unit tests for class ListQueueOptions
 *
 * @category  Microsoft
 * @package   PEAR2\Tests\Unit\WindowsAzure
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
class ListQueueOptionsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers PEAR2\WindowsAzure\Services\Queue\Models\ListQueueOptions::setPrefix
     */
    public function testSetPrefix()
    {
        // Setup
        $options = new ListQueueOptions();
        $expected = 'myprefix';
        
        // Test
        $options->setPrefix($expected);
        
        // Assert
        $this->assertEquals($expected, $options->getPrefix());
    }
    
    /**
     * @covers PEAR2\WindowsAzure\Services\Queue\Models\ListQueueOptions::getPrefix
     */
    public function testGetPrefix()
    {
        // Setup
        $options = new ListQueueOptions();
        $expected = 'myprefix';
        $options->setPrefix($expected);
        
        // Test
        $actual = $options->getPrefix();
        
        // Assert
        $this->assertEquals($expected, $actual);
    }
    
    /**
     * @covers PEAR2\WindowsAzure\Services\Queue\Models\ListQueueOptions::setMarker
     */
    public function testSetMarker()
    {
        // Setup
        $options = new ListQueueOptions();
        $expected = 'mymarker';
        
        // Test
        $options->setMarker($expected);
        
        // Assert
        $this->assertEquals($expected, $options->getMarker());
    }
    
    /**
     * @covers PEAR2\WindowsAzure\Services\Queue\Models\ListQueueOptions::getMarker
     */
    public function testGetMarker()
    {
        // Setup
        $options = new ListQueueOptions();
        $expected = 'mymarker';
        $options->setMarker($expected);
        
        // Test
        $actual = $options->getMarker();
        
        // Assert
        $this->assertEquals($expected, $actual);
    }
    
    /**
     * @covers PEAR2\WindowsAzure\Services\Queue\Models\ListQueueOptions::setMaxResults
     */
    public function testSetMaxResults()
    {
        // Setup
        $options = new ListQueueOptions();
        $expected = '3';
        
        // Test
        $options->setMaxResults($expected);
        
        // Assert
        $this->assertEquals($expected, $options->getMaxResults());
    }
    
    /**
     * @covers PEAR2\WindowsAzure\Services\Queue\Models\ListQueueOptions::getMaxResults
     */
    public function testGetMaxResults()
    {
        // Setup
        $options = new ListQueueOptions();
        $expected = '3';
        $options->setMaxResults($expected);
        
        // Test
        $actual = $options->getMaxResults();
        
        // Assert
        $this->assertEquals($expected, $actual);
    }
    
    /**
     * @covers PEAR2\WindowsAzure\Services\Queue\Models\ListQueueOptions::setIncludeMetadata
     */
    public function testSetIncludeMetadata()
    {
        // Setup
        $options = new ListQueueOptions();
        $expected = true;
        
        // Test
        $options->setIncludeMetadata($expected);
        
        // Assert
        $this->assertEquals($expected, $options->getIncludeMetadata());
    }
    
    /**
     * @covers PEAR2\WindowsAzure\Services\Queue\Models\ListQueueOptions::getIncludeMetadata
     */
    public function testGetIncludeMetadata()
    {
        // Setup
        $options = new ListQueueOptions();
        $expected = true;
        $options->setIncludeMetadata($expected);
        
        // Test
        $actual = $options->getIncludeMetadata();
        
        // Assert
        $this->assertEquals($expected, $actual);
    }
}

?>
