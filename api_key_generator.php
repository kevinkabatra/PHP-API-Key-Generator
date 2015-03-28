<?php

/* 
 * Copyright (c) 2015, Kevin Kabatra <kevinkabatra@gmail.com>
 * All rights reserved.
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 * 
 * 1. Redistributions of source code must retain the above copyright notice, 
 *    this list of conditions and the following disclaimer. 
 * 2. Redistributions in binary form must reproduce the above copyright notice,
 *    this list of conditions and the following disclaimer in the documentation
 *    and/or other materials provided with the distribution.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE 
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE 
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR 
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF 
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS 
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN 
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE 
 * POSSIBILITY OF SUCH DAMAGE.
 */
 
 /* 
 * The code follows the Follow Field Naming Conventions from the 
 * AOSP (Android Open Source Project) Code Style Guidelines for Contributors :
 *     Non-public, non-static field names start with m.
 *     Static field names start with s.
 *     Other fields start with a lower case letter.
 *     Public static final fields (constants) are ALL_CAPS_WITH_UNDERSCORES
 * Hyperlink: (too long for one line)
 *     http://source.android.com/source/code-style
 *     .html#follow-field-naming-conventions
 */

    //declare and set variables
    $output = null;
    
    /**
     * Generates a random integer between 48 and 122.
     * <p>
     * @return int Non-cryptographically generated random number.
     */
    function findRandom() {
        $mRandom = rand(48, 122);
        return $mRandom;
    }
    
    /**
     * Checks if $random equals ranges 48:57, 56:90, or 97:122.
     * <p>
     * This function is being used to filter $random so that when used in:
     * '&#' . $random . ';' it will generate the ASCII characters for ranges
     * 0:8, a-z (lowercase), or A-Z (uppercase).
     * <p>
     * @param int $mRandom Non-cryptographically generated random number.
     * @return int 0 if not within range, else $random is returned. 
     */
    function isRandomInRange($mRandom) {
        if(($mRandom >=58 && $mRandom <= 64) ||
                (($mRandom >=91 && $mRandom <= 96))) {
            return 0;
        } else {
            return $mRandom;
        }
    }   
    
    for($loop = 0; $loop <= 31; $loop++) {
        for($isRandomInRange = 0; $isRandomInRange === 0;){
            $isRandomInRange = isRandomInRange(findRandom());
        }
        $output .= html_entity_decode('&#' . $isRandomInRange . ';');
    }
    
    echo $output;
