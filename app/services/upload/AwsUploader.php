<?php

/**
 * @author Abed Halawi <abed@questionemploi.com>
 */

class AwsUploader implements UploadManagerInterface {

    public function setCredentials(array $credentials)
    {
        $this->validateCredentials($credentials);
        $this->key    = $credentials['key'];
        $this->secret = $credentials['secret'];
    }

    public function upload(array $files)
    {
        // Perform the authentication
        $this->authenticate();

        // Perform the upload
        return $this->performUpload($files);
    }

    /**
     * Authenticate with Amazon.
     *
     * @return boolean
     */
    private function authenticate()
    {
        // authenticate
    }

    /**
     * Upload the files to Amazon.
     *
     * @param  array $files
     * @return array
     */
    private function performUpload($files)
    {
        // upload files
    }

    /**
     * Validate credentials' required keys.
     *
     * @param  array  $credentials
     * @return boolean
     */
    private function validateCredentials(array $credentials)
    {
        if (isset($credentials['key']) && ! is_null($credentials['key'])
            && isset($credentials['secret']) && ! is_null($credentials['secret']))
        {
            return true;
        }

        throw InvalidCredentialsException('The credentials you entered are not valid');
    }
}
