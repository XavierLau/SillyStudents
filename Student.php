<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 * 
 * @author Xavier Lau
 */
class Student {
    /**
     * Instantiates a student.
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    /**
     * Adds an email for a student.
     * @param type $which 
     *  type of email
     * @param type $address
     *  email address
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }
    
    /**
     * Adds a grade for a student.
     * @param type $grade
     *  grade acquired
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Calculates the average grade for a student.
     * @return type
     *  the average grade for a student
     */
    function average() {
        $total = 0;
        foreach($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /**
     * Formats information for a student.
     * @return type
     *  a formatted string of a student's information
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach($this->emails as $which=> $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}