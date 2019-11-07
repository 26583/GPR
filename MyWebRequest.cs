using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class MyWebRequest : MonoBehaviour
{
    [SerializeField]
    private Text textDisplay;
    // Start is called before the first frame update
    void Start()
    {
        StartCoroutine(FetchURL());
    }

    // Update is called once per frame
    void Update()
    {
        
    }

    IEnumerator FetchURL()
    {
        string url = "http://26583.hosts2.ma-cloud.nl//Database/getData.php";
        WWW webRequest = new WWW(url);

        yield return webRequest;

        Debug.Log(webRequest.text);
        SetUi(webRequest.text);
    }
    private void SetUi(string str)
    {
        string[] array = str.Split(';');
        textDisplay.text = "";
        for(int i = 0; i<array.Length; i++)
        {
            textDisplay.text += array[i] + "\n";
        }
    }
}
