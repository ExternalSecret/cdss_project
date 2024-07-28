<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class CdssController extends Controller
{
    public function index()
    {
        $symptoms = [
            "Fever", "Fatigue", "Loss of Appetite", "Nausea", "Vomiting", "Abdominal Pain",
            "Dark Urine", "Jaundice (Yellowing of the skin and eyes)", "Weight Loss", "Malaise (General feeling of discomfort)",
            "Joint Pain", "Muscle Pain", "Headache", "Night Sweats", "Chills", "Sweating",
            "Persistent Cough", "Chest Pain", "Sore Throat", "Blurred Vision", "Slow-Healing Sores",
            "Frequent Infections", "Tingling or Numbness in Hands or Feet", "Darkened Skin Patches", "Pallor (Pale skin)",
            "Rash", "Diarrhea", "Itching", "Spider Angiomas (Small, spider-like blood vessels visible on the skin)", 
            "Edema (Swelling of the legs)", "Swollen Lymph Nodes", "Mouth Ulcers", "Confusion", 
            "Seizures", "Respiratory Distress", "Organ Failure", "Memory Loss", "Depression",
            "Opportunistic Infections", "Hemoptysis (Coughing up blood)", "Facial Swelling",
            "Bleeding from gums, nose, eyes, or gastrointestinal tract", "Hearing Loss", 
            "Neurological Symptoms (e.g., confusion, tremors, seizures, encephalitis)", "Shock (Circulatory collapse)",
            "Lymphadenitis (Swelling of lymph nodes)", "Ascites (Fluid accumulation in the abdomen)",
            "Clay-Colored Stools", "Mild Fever", "Persistent Tiredness", "Sleep Disturbances", 
            "Muscle and Joint Pain", "Abdominal Discomfort", "Bruising or Bleeding Easily", "Increased Thirst (Polydipsia)",
            "Frequent Urination (Polyuria)", "Extreme Hunger (Polyphagia)", "Vision Changes or Trouble Focusing",
            "Delayed Healing of Cuts and Wounds", "Dry Mouth", "Shortness of Breath", "Chest Tightness",
            "Cyanosis (Bluish skin, lips, or nails due to lack of oxygen)", "Difficulty Swallowing", "Hoarseness",
            "Bloating", "Heartburn", "Constipation", "Back Pain", "Neck Pain", "Dizziness", "Fainting", 
            "Tremors", "Balance Problems", "Dry Skin", "Hair Loss", "Increased Sensitivity to Cold", 
            "Increased Sensitivity to Heat", "Hives", "Nasal Congestion", "Runny Nose", "Sneezing", 
            "Ear Pain", "Swelling in the Feet or Ankles"
        ];

        // Pass the symptoms to the view
        return view('cdss_toolkit', compact('symptoms'));
    }

    public function predict(Request $request)
    {
        $symptoms = $request->input('symptoms');

        // Call the Python script
        $process = new Process(['python3', base_path('scikit_script.py'), json_encode($symptoms)]);
        $process->run();

        // Check if the process ran successfully
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $output = $process->getOutput();
        $prediction = json_decode($output, true);

        return response()->json($prediction);
    }
}
