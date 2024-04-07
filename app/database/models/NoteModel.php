<?php

namespace app\database\models;

use app\library\database\Model;

class NoteModel extends Model
{
  protected string $entity = 'note';
  protected string $table = 'notes';
}
