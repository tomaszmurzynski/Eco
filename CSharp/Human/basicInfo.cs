using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class basicInfo : MonoBehaviour {

    public string name;
    public float width;
    public float weight;
    public string email;
    private Rigidbody human;


	// Use this for initialization
	void Start ()
    {
        transform.localScale = new Vector3(1,(width/100),1);
        human = GetComponent<Rigidbody>();
        human.mass = weight / 100;
        
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}
}
