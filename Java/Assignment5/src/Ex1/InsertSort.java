package Ex1;

public class InsertSort  extends SequenceNumber{
	
	public InsertSort(int n) {
		super(n);
	}
	
	@Override
	public void Sort() {
		insertionSort(arr, arr.length);
	}

	
	void insertionSort(int arr[], int n)  
	{  
	    int i, key, j;  
	    for (i = 1; i < n; i++) 
	    {  
	        key = arr[i];  
	        j = i - 1;  
	  
	        while (j >= 0 && arr[j] > key) 
	        {  
	            arr[j + 1] = arr[j];  
	            j = j - 1;  
	        }  
	        arr[j + 1] = key;  
	    }  
	}  
	

	

}