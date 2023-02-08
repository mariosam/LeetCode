/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FirstMissingPositiveTest {

    @Test
	public void testFirstMissingPositive() throws Exception {
        //Test 1
        int want = 3;
        int got = FirstMissingPositive.firstMissingPositive( new int[]{1,2,0} );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got = FirstMissingPositive.firstMissingPositive( new int[]{3,4,-1,1} );
        assertEquals(want, got);
        //Test 3
        want = 1;
        got = FirstMissingPositive.firstMissingPositive( new int[]{7,8,9,11,12} );
        assertEquals(want, got);
        //Test 4
        want = 2;
        got = FirstMissingPositive.firstMissingPositive( new int[]{1,1} );
        assertEquals(want, got);
        //Test 5
        want = 3;
        got = FirstMissingPositive.firstMissingPositive( new int[]{0,2,2,1,1} );
        assertEquals(want, got);
        //Test 6
        want = 2;
        got = FirstMissingPositive.firstMissingPositive( new int[]{1} );
        assertEquals(want, got);
        //Test 7
        want = 3;
        got = FirstMissingPositive.firstMissingPositive( new int[]{2,1} );
        assertEquals(want, got);
        //Test 8
        want = 1;
        got = FirstMissingPositive.firstMissingPositive( new int[]{2} );
        assertEquals(want, got);
        //Test 9
        want = 1;
        got = FirstMissingPositive.firstMissingPositive( new int[]{-5} );
        assertEquals(want, got);
        //Test 10
        want = 2;
        got = FirstMissingPositive.firstMissingPositive( new int[]{1,1000} );
        assertEquals(want, got);
        //Test 11
        want = 11;
        got = FirstMissingPositive.firstMissingPositive( new int[]{1,2,3,4,5,6,7,8,9,10} );
        assertEquals(want, got);
        //Test 12
        want = 2;
        got = FirstMissingPositive.firstMissingPositive( new int[]{1,3,3} );
        assertEquals(want, got);
        //Test 13
        want = 100;
        got = FirstMissingPositive.firstMissingPositive( new int[]{99,94,96,11,92,5,91,89,57,85,66,63,84,81,79,61,74,78,77,30,64,13,58,18,70,69,51,12,32,34,9,43,39,8,1,38,49,27,21,45,47,44,53,52,48,19,50,59,3,40,31,82,23,56,37,41,16,28,22,33,65,42,54,20,29,25,10,26,4,60,67,83,62,71,24,35,72,55,75,0,2,46,15,80,6,36,14,73,76,86,88,7,17,87,68,90,95,93,97,98} );
        assertEquals(want, got);
	}

}
