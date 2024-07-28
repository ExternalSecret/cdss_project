import pandas as pd
from sklearn.tree import DecisionTreeClassifier
import json

symptoms = ["Fever", "Fatigue", "Loss of Appetite", ...]
illnesses = ["Hepatitis", "Malaria", "Influenza", ...]

data = {
    "Illness": ["Hepatitis", "Malaria", "Influenza", ...],
    "Fever": [1, 1, 1, ...],
    "Fatigue": [1, 1, 1, ...],
    "Loss of Appetite": [1, 1, 1, ...],
}

df = pd.DataFrame(data)

X = df[symptoms]
y = df["Illness"]

clf = DecisionTreeClassifier()
clf.fit(X, y)

def predict_illness(symptoms_dict):
    input_data = [symptoms_dict[symptom] for symptom in symptoms]
    prediction = clf.predict([input_data])
    return prediction[0]

example_symptoms = {
    "Fever": 1,
    "Fatigue": 0,
    "Loss of Appetite": 1,
}

predicted_illness = predict_illness(example_symptoms)
print(f"Predicted Illness: {predicted_illness}")

def handle_request(json_input):
    symptoms_dict = json.loads(json_input)
    predicted_illness = predict_illness(symptoms_dict)
    return json.dumps({"illness": predicted_illness})

json_input = json.dumps(example_symptoms)
print(handle_request(json_input))