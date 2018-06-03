using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class ball : MonoBehaviour {

    public float moveSpeed = 10f;  //Deklaracja zmiennej typu float z prędkością

    private Rigidbody rbody; // Deklaracja fizyki 
    private Renderer rend;
    private Light myLight;
	// Use this for initialization
	void Start ()
    {
        rbody = GetComponent<Rigidbody>();  //Przypsanie kompontu z fizyką 
        rend = GetComponent<Renderer>(); //
        myLight = GetComponent<Light>();
	}
	
	// Update is called once per frame
	void Update ()
    {
        float inputX = Input.GetAxis("Horizontal");
        float inputZ = Input.GetAxis("Vertical");

        float moveX = inputX * moveSpeed * Time.deltaTime;
        float moveZ = inputZ * moveSpeed * Time.deltaTime;

        //transform.Translate(moveX, 0f, moveZ);
        rbody.AddForce(moveX, 0f, moveZ);
    }

    void OnCollisionEnter(Collision collision)
    {
        print(collision.collider.name);
        if (collision.collider.name == "wall1")
            {
                rend.material.color = Color.blue;
            myLight.color = Color.blue;
            }
        else if(collision.collider.name == "wall2")
            {
                rend.material.color = Color.grey;
            myLight.color = Color.grey;
        }
        else if (collision.collider.name == "wall3")
        {
            rend.material.color = Color.green;
            myLight.color = Color.green;
        }
        else if (collision.collider.name == "wall4")
        {
            rend.material.color = Color.red;
            myLight.color = Color.red;
        }
    }
}
