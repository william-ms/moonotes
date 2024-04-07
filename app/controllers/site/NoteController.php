<?php

namespace app\controllers\site;

use app\database\models\NoteModel;
use app\library\controllers\Controller;
use app\library\database\actions\FindAll;
use app\library\database\Query;

class NoteController extends Controller
{
  public function show(array $args)
  {
    $sections = session_get('sections');

    foreach($sections as $section)
    {
      if($section->id == $args['show'])
      {
        $section_current = $section;
      }
    }

    $content = "<div class='sidebar-title'>";
    $content .= "<button class='sidebar-back' onclick='backSidebar()'><i class='fa-solid fa-angles-left'></i></button>";
    $content .= "<h2>{$section_current->title}</h2>";
    $content .= "</div>";
    
    $query = (new Query)->where('section_id', '=', $args['show']);
    $notes = (new NoteModel)->execute(new FindAll($query));

    $list = '';

    if(!empty($notes))
    {
      session_set('notes', $notes);

      $list = '<ul>';
  
      if($notes)
      {
        foreach($notes as $note)
        {
          $list .= "<li><button>{$note->title}</button></li>";
        }
      }
  
      $list .= '</ul>';
    }

    $content .= $list;

    echo $content;
  }
}