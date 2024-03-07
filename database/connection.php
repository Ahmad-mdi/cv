<?php

$con = mysqli_connect('localhost', 'root', '', 'cv');

function getGeneralInfo($connection)
{
    $select = mysqli_query($connection, "select * from general_info limit 1");
    return mysqli_fetch_array($select);
}

function getExperiences($connection)
{
    $select = mysqli_query($connection, "select * from expriences");
    $data = [];
    while ($row = mysqli_fetch_array($select)){
        $data[] = $row;
    }
    return $data;
}

function getEducations($connection)
{
    $select = mysqli_query($connection, "select * from education");
    $data = [];
    while ($row = mysqli_fetch_array($select)){
        $data[] = $row;
    }
    return $data;
}

function getSkills($connection)
{
    $select = mysqli_query($connection, "select * from skills");
    $dataSkills = [];
    while ($row = mysqli_fetch_array($select)){
        $dataSkills[] = $row;
    }
    $select = mysqli_query($connection, "select * from skill_tools");
    $dataSkill_tools = [];
    while ($row = mysqli_fetch_array($select)){
        $dataSkill_tools[] = $row;
    }
    return [
        'skills' => $dataSkills,
        'skill_tools' => $dataSkill_tools,
    ];
}

function getAwards($connection){
    $select = mysqli_query($connection, "select * from awards");
    $data = [];
    while ($row = mysqli_fetch_array($select)){
        $data[] = $row;
    }
    return $data;
}


