<?php

namespace app\controllers\site;

use app\database\entities\SectionEntity;
use app\database\models\SectionModel;
use app\library\controllers\Controller;
use app\library\database\actions\FindAll;
use app\library\database\actions\Insert;
use app\library\database\Query;
use app\library\sanitize\Sanitize;

class SectionController extends Controller
{
  public function store()
  {
    $sanitize = Sanitize::handle();

    $user = session_get('user');
  
    $section = new SectionEntity;
    $section_model = new SectionModel;
  
    $section->user_id = $user->id;
    $section->title = $sanitize->get('section-title');
    $section->notes = '';
    $section_model->execute(new Insert($section));
  
    $query = (new Query)->where('user_id', '=', $user->id);
    $sections = $section_model->execute(new FindAll($query));
    session_set('sections', $sections);
  
    $list = '';
    foreach($sections as $section)
    {
      $list .= "
      <li>
        <button onclick='getNotes({$section->id})'>
          {$section->title}
        </button>
      </li>";
    }
  
    echo $list;
  }
}
