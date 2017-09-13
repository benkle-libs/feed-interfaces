<?php
/*
 * Copyright (c) 2017 Benjamin Kleiner
 *
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.  IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */


namespace Benkle\FeedInterfaces;

/**
 * Interface RelationLinkInterface
 * @package Benkle\FeedInterfaces
 */
interface RelationLinkInterface extends NodeInterface
{
    /**
     * Get the relation url.
     * @return string
     */
    public function getUrl();

    /**
     * Set the relation url.
     * @param string $url
     * @return $this
     */
    public function setUrl($url);

    /**
     * Get the relation type, e.g. "self" or "alternate".
     * @return string
     */
    public function getRelationType();

    /**
     * Set the relation type.
     * @param string $rel
     * @return $this
     */
    public function setRelationType($rel);

    /**
     * Get the mime type.
     * @return string
     */
    public function getMimeType();

    /**
     * Set the mime type.
     * @param string $mimeType
     * @return $this
     */
    public function setMimeType($mimeType);

    /**
     * Get the relation title.
     * @return string
     */
    public function getTitle();

    /**
     * Set the relation title.
     * @param string $title
     * @return $this
     */
    public function setTitle($title);
}
