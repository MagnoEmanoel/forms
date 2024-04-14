<?php

class RegistrationForm
{
    private $storagePath = __DIR__ . '/../../storage/users.json';

    public function handlePost()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Filtrar e validar os dados
            $data = $this->filterData($_POST);
            $this->saveData($data);
            $_SESSION['form_submitted'] = true; 
        }
    }

    private function filterData($data)
    {
        
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $data[$key] = array_map('strip_tags', $value);
            } else {
                $data[$key] = strip_tags($value);
            }
        }
        return $data;
    }

    private function saveData($data)
    {
        $currentData = json_decode(file_get_contents($this->storagePath), true) ?? [];
        $currentData[] = $data;
        file_put_contents($this->storagePath, json_encode($currentData, JSON_PRETTY_PRINT));
    }

    public function wasSubmitted()
    {
        return !empty($_SESSION['form_submitted']);
    }

    public function clearSubmissionFlag()
    {
        unset($_SESSION['form_submitted']);
    }

    public function getData()
    {
        return json_decode(file_get_contents($this->storagePath), true) ?? [];
    }
}
