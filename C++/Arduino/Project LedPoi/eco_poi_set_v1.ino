
// FOR IR
#include <IRremote.h>
int RECV_PIN = 11;
IRrecv irrecv(RECV_PIN);
decode_results results;
#define UP 0x511DBB
#define DOWN 0xA3C8EDDB
#define OK 0xD7E84B1B
// END IR
// FOR PROGRAMS
int programNr=0;


// END PROGRAMS

void setup() {
  // put your setup code here, to run once:
  // FOR IR
  Serial.begin(9600);
  irrecv.enableIRIn(); // Start the receiver
  // END IR
}

void loop() {
  // put your main code here, to run repeatedly:
  // FOR IR
  if (irrecv.decode(&results)) {
      switch (results.value){
        case UP: ButtonUP(); break;
        case DOWN: ButtonDown(); break;
        case OK: ButtonOk(); break;
      }   
    //logReceivedCode(results.value);
    irrecv.resume(); // Receive the next value
  }
  delay(100);
  // END IR
  // FOR PROGRAMS
if (programNr>0){
  switch(programNr){
    
    case 1: Program1(); break;
    case 2: Program2(); break;
  }
}

  // END PROGRAMS
}

// FOR IR
void logReceivedCode(long irCode) {
  Serial.print("Received signal: ");
  Serial.print(irCode);
  Serial.print(", hex: ");
  Serial.println(irCode, HEX);
}
void ButtonUP(){
  ++programNr; // change programNr + 1
  Serial.print("Button Up :) ");
  Serial.print(programNr);
  
}
void ButtonDown(){
   --programNr; // change programNr - 1
  Serial.print("Button Down :) ");
  Serial.print(programNr);
}
void ButtonOk(){
   programNr=0; // change programNr = 0
  Serial.print("Button Ok :) ");
  Serial.print(programNr);
}
// END IR
// FOR PROGRAMS
void Program1(){
  Serial.print("TERAZ JEST PROGRAM 1");
  delay(5000);
}
void Program2(){
  Serial.print("TERAZ JEST PROGRAM 2");
  delay(5000);
}
// END PROGRAMS
