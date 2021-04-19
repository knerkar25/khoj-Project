<?php

  return [
    'number' => '<li class="paginate_button page-item">
                    <a href="{{url}}" class="page-link">{{text}}</a>
                  </li>',
    'current' => '<li class="paginate_button page-item active">
                    <a href="{{url}}" class="page-link">{{text}}</a>
                  </li>',
    'prevDisabled' => '<li class="paginate_button page-item previous disabled">
                          <a href="{{url}}" class="page-link">{{text}}</a>
                       </li>',
    'prevActive' => '<li class="paginate_button page-item previous">
                      <a href="{{url}}" class="page-link">{{text}}</a>
                     </li>',
    'nextDisabled' => '<li class="paginate_button page-item next disabled">
                        <a href="{{url}}" class="page-link">{{text}}</a>
                       </li>',
    'nextActive' => '<li class="paginate_button page-item next">
                      <a href="{{url}}" class="page-link">{{text}}</a>
                     </li>'
  ];

?>