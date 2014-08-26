<?php

namespace VCR\Storage;

/**
 * Interface for storing records.
 *
 * Storages can be iterated using standard loops.
 * New recordings can be stored.
 */
interface StorageInterface extends \Iterator
{
    /**
     * Stores an array of data.
     *
     * @param array $recording Array to store in storage.
     * @return void
     */
    public function storeRecording(array $recording);

    /**
     * Returns true if the file did not exist and had to be created.
     *
     * @return boolean TRUE if created, FALSE if not
     */
    public function isNew();
}
