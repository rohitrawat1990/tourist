<?php

/*
 * Author->Gyan 
  Copyright (c) 2014 ASR Market Ventures Private Limited. All rights reserved.

  Redistribution and use in source and binary forms, with or without
  modification, are permitted provided that the following conditions are
  met:

 * Redistributions of source code must retain the above copyright
  notice, this list of conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above
  copyright notice, this list of conditions and the following disclaimer
  in the documentation and/or other materials provided with the
  distribution.
 * Neither the name of ASR Market Ventures Private Limited. nor the names of its
  contributors may be used to endorse or promote products derived from
  this software without specific prior written permission.
 * ASR reserves the right to redistribute the source code, binaries,
  derivative works, techniques, documents, designs and other techniques
  used in this framework under a different license.

  For any questions you may contact us at:

  Attn:
  ASR Market Ventures Private Limited

  Contact:
  http://www.skillhippo.com


  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
  "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
  LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
  A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
  OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
  SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
  LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
  DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
  THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
  (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
  OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

//Include Php Mailer class globaly
//Note  About Student_details=student_current_status{0=>Not Rated,1=>Rated,2=>Recommendation}
//Skill::Gyan function use for debug purpose
function pr($arr, $die = true) {
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    if ($die) {
        die();
    }
}

function frontUploadDir() {
    return 'frontend/www';
}

//Skill::Gyan function use for generate rendom string
function guid() {
    if (function_exists('com_create_guid')) {
        $guid = com_create_guid();
        $guid = preg_replace("/[^A-Za-z0-9]/", "", $guid);
        return $guid;
    } else {
        mt_srand((double) microtime() * 10000); //optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $guid = substr($charid, 0, 8)
                . substr($charid, 8, 4)
                . substr($charid, 12, 4)
                . substr($charid, 16, 4)
                . substr($charid, 20, 12);
        return $guid;
    }
}
