#include <Ethernet.h>
#include<SPI.h>
#include <MFRC522.h>
#include <Base64.h>

#define RST_PIN  5    //Pin 5 para el reset del RC522
#define SS_PIN  53   //Pin 53 para el SS (SDA) del RC522
MFRC522 mfrc522(SS_PIN, RST_PIN); //Creamos el objeto para el RC522

// Configuracion del Ethernet Shield
byte mac[] = {0xDE, 0xAD, 0xBE, 0xEF, 0xFF, 0xEE}; // Direccion MAC
byte ip[] = { 192,168,1,100}; // Direccion IP del Arduino
byte server[] = { 192,168,1,6 }; // Direccion IP del servidor
byte rfid[4];
char encoded[0];
EthernetClient client; 
//float temperatura;
//int analog_pin = 0;
//
void setup() {
  Serial.begin(9600); //Iniciamos la comunicación  serial
  SPI.begin();        //Iniciamos el Bus SPI
  mfrc522.PCD_Init(); // Iniciamos  el MFRC522
  Serial.println("Lectura del UID");
 Ethernet.begin(mac, ip); // Inicializamos el Ethernet Shield
 delay(1000); // Esperamos 1 segundo de cortesia
}

void loop() {

   // Revisamos si hay nuevas tarjetas  presentes
  if ( mfrc522.PICC_IsNewCardPresent()) 
        {  
      //Seleccionamos una tarjeta
            if ( mfrc522.PICC_ReadCardSerial()) 
            {
                  // Enviamos serialemente su UID
                  Serial.print("Card UID:");
                  for (byte i = 0; i < mfrc522.uid.size; i++) {
                          Serial.print(mfrc522.uid.uidByte[i] < 0x10 ? " 0" : " ");
                          Serial.print(mfrc522.uid.uidByte[i], HEX);   
                          rfid[i] = mfrc522.uid.uidByte[i];
                  } 
                  Serial.println();
                  int encodedLen = base64_enc_len(sizeof(rfid));
                  encoded[encodedLen] = {};
                  base64_encode(encoded, rfid, sizeof(rfid));
                  Serial.println(encoded);
                  // Terminamos la lectura de la tarjeta  actual
                  mfrc522.PICC_HaltA();
                  enviarAServidor(encoded);        
            }      
  } 
  
  // put your main code here, to run repeatedly:
  
  //delay(60000); // Espero un minuto antes de tomar otra muestra
}

void enviarAServidor(char* data){
   Serial.println("Connecting...");
   Serial.println("/tutoiot/iot.php?valor="+String(data));
    if (client.connect(server, 80)>0) {  // Conexion con el servidor
      client.print("GET /tutoiot/iot.php?valor="+String(data)); // Enviamos los datos por GET
      //client.print();//variable a enviar 
      client.println(" HTTP/1.0");
      client.println("User-Agent: Arduino 1.0");
      client.println();
      Serial.println("Conectado");
    } else {
      Serial.println("Fallo en la conexion");
    }
    if (!client.connected()) {
      Serial.println("Disconnected!");
    }
    client.stop();
    client.flush();  
  
};


