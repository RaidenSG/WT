	function checkPrime(numberToCheck)
	{
		if(numberToCheck == 1)
		{
			return false;
		}
		for (let i = 2; i * i <= numberToCheck; i++)
		{
			if (numberToCheck % i == 0)
			{
				return false;
			}
		}
		return true;
	}

	function primeSum(l, r)
	{
		let sum = 0;
		for (let i = r; i >= l; i--)
		{
			let isPrime = checkPrime(i);
			if (isPrime)
			{
				sum = sum + i;
			}
		}
		return sum;
	}
	
	let l = 4, r = 13;
	document.write(primeSum(l, r));

