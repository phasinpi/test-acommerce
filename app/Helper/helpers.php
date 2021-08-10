<?php

function customImage()
{
    return "https://loremflickr.com/320/380";
}

function dateHumanReadable($date)
{
    return \Carbon\Carbon::parse($date)->diffForHumans();
}

function rating($vote)
{
    switch ($vote) {
        case "1":
            return "<i class=\"fas fa-star\"></i>";
            break;
        case "2":
            return "<i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i>";
            break;
        case "3":
            return "<i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i>";
            break;
        case "4":
            return "<i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i>";
            break;
        case "5":
            return "<i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i>";
            break;
        default:
            return "";
    }
}
