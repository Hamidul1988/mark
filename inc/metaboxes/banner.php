<?php

function mark_section_baner_metabox($metaboxes){
    $section_id=0;
    if(isset($_REQUEST['post'])||isset($_REQUEST['post_Id'])){
        $section_id= empty($_REQUEST['post_Id'])?$_REQUEST['post']:$_REQUEST['post_Id'];
    }
    if("marksection"!=get_post_type($section_id)){
        return $metaboxes;
    }
    $section_meta=get_post_meta($section_id,'mark_section_type',true);
    if(!$section_meta){
        return $metaboxes;
    }elseif ($section_meta['section_type']!='banner'){
        return $metaboxes;
    }
    $metaboxes[]=array(
        'id'=>'mark_section_banner',
        'title'=>__('Banner Seting','mark'),
        'post_type'=>'marksection',
        'context'=>'normal',
        'priority'=>'default',
        'sections'=>array(
            array(
    'name'=>'mark_section_banner',
    'icon'=>'fa fa-image',
    'fields'=>array(
        array(
            'id'=>'image',
            'type'=>'image',
            'title'=>__('Banner Image','mark'),

            ),
        array(
            'id'=>'heading',
            'type'=>'text',
            'title'=>__('Banner Heading','mark'),
            'default'=>__('Gain the beautiful result','mark')

        ),
        array(
            'id'=>'sub_heading',
            'type'=>'text',
            'title'=>__('Banner Sub Heading','mark'),
            'default'=>__('Unlocking the next dimension in business analysis','mark')

        ),
        array(
            'id'=>'button_one_label',
            'type'=>'text',
            'title'=>__('Button  One Label','mark'),
            'default'=>__('Lets Start Now','mark')

        ),
        array(
            'id'=>'button_two_label',
            'type'=>'text',
            'title'=>__('Button  Two Label','mark'),
            'default'=>__('Purchase Now','mark')


        ),
        array(
            'id'=>'button_one_url',
            'type'=>'text',
            'title'=>__('Button  one Url','mark'),
            //'dependency' => array( 'button_two_label', '!=', '' )

        ),
        array(
            'id'=>'button_two_url',
            'type'=>'text',
            'title'=>__('Button  Two Url','mark'),
            //'dependency' => array( 'button_two_label', '!=', '' )

        ),

            )
            )
        ),
    );

    return $metaboxes;
}
add_filter('cs_metabox_options','mark_section_baner_metabox');