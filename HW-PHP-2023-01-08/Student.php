<?php
class Student extends User
{
    private int $course;

    public function addOneYear()
		{
			$this->age++;
		}

    public function setCourse (int $course)
    {
        if ($this -> isCourseCorrect ($course)) {
            $this -> course = $course;
        } else {
            echo 'Введите правильный курс студента'. '<br/>';
        }
        
    }
    public function getCourse (): int
    {
        return $this -> course;
    }
    public function transferToNextCourse (int $course)
    {
        if ($this -> isCourseCorrect ($course) && $course < 5) {
            $this -> course = $course++;
            echo 'Студент будет переведен на '. $course . ' курс' . '<br/>';
        } else {
            echo 'Обучение завершено' . '<br/>';
        }
    }
    private function isCourseCorrect (int $course)
    { 
       return $course >= 1 && $course <= 5;
    }
}