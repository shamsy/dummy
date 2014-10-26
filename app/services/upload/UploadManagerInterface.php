<?php

/**
 * @author Abed Halawi <abed@questionemploi.com>
 */

interface UploadManagerInterface {

    /**
     * Set the credentials for the service.
     * NOTE: This must be called before performing any update
     *     operations, IF authentication is required by the service.
     *
     * @param array $credentials
     * @return void
     *
     * @throws InvalidCredentialsException If the passed credentials do not conform to the requried params.
     */
    public function setCredentials(array $credentials);

    /**
     * Perform an upload operation for the given files.
     *
     * @param  array $files The files that you would like to upload to CDN.
     * @return array        The array of URLs mapping the give file names. i.e.
     *                          [
     *                              'file_1.jpg' => 'http://cdn.url/xyz.jpg',
     *                              'file_2.jpg' => 'http://cdn.url/uihf.jpg'
     *                          ]
     *
     * @throws  UploadManagerAuthenticationException If the credentials you have used are either wrong or not permitted.
     */
    public function upload(array $files);
}
