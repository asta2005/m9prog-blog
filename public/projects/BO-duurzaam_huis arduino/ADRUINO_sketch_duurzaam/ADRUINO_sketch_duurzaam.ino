const int LED_D3 = D3;
const int LED_D5 = D5;
const int LED_D6 = D6;

int A, B, C, D;

void setup() {
  Serial.begin(115200); 
  pinMode(LED_D3, OUTPUT);
  pinMode(LED_D5, OUTPUT);
  pinMode(LED_D6, OUTPUT);
}

void loop() {
  A = random(999);
  B = random(999);
  C = random(999);
  D = random(999);

  if (A > B || A < C) {
    digitalWrite(LED_D3, HIGH);
  } else {
    digitalWrite(LED_D3, LOW);
  }

  if (C > A && A < B) {
    digitalWrite(LED_D5, HIGH);
  } else {
    digitalWrite(LED_D5, LOW);
  }

  if (B > C && B > A && C < A) {
    digitalWrite(LED_D6, HIGH);
  } else {
    digitalWrite(LED_D6, LOW);
  }

 
  if (D == max(max(A, B), max(C, D))) {
   
    blinkAllLEDs();
  }
  delay(10000);
}

void blinkAllLEDs() {
  for (int i = 0; i < 10; i++) {
    digitalWrite(LED_D3, HIGH);
    digitalWrite(LED_D5, HIGH);
    digitalWrite(LED_D6, HIGH);
    delay(100);
    digitalWrite(LED_D3, LOW);
    digitalWrite(LED_D5, LOW);
    digitalWrite(LED_D6, LOW);
    delay(100);
  }
  Serial.println(A);
  Serial.println(B);
  Serial.println(C);
  Serial.println(D);
}
