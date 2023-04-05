<?php

namespace App\Observers;

use App\Models\Author;

class AuthorObserver
{
    /**
     * Handle the Author "deleting" event.
     *
     * @param  \App\Models\Author  $author
     * @return void
     */
    public function deleting(Author $author)
    {
        $author->books()->delete();
    }
}
