<?php

/*
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

abstract class PhabricatorWorker {

  private $data;

  final public function __construct($data) {
    $this->data = $data;
  }

  final protected function getTaskData() {
    return $this->data;
  }

  final public function executeTask() {
    $this->doWork();
  }

  public function getRequiredLeaseTime() {
    return null;
  }

  abstract protected function doWork();
}
