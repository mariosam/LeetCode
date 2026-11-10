/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindTheDistanceValueBetweenTwoArraysTest {

    @Test
	public void testFindTheDistanceValueBetweenTwoArrays() throws Exception {
        //Test 1
        int want = 2;
        int got = FindTheDistanceValueBetweenTwoArrays.findTheDistanceValue( new int[]{4,5,8}, new int[]{10,9,1,8}, 2 );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got = FindTheDistanceValueBetweenTwoArrays.findTheDistanceValue( new int[]{1,4,2,3}, new int[]{-4,-3,6,10,20,30}, 3 );
        assertEquals(want, got);
        //Test 3
        want = 1;
        got = FindTheDistanceValueBetweenTwoArrays.findTheDistanceValue( new int[]{2,1,100,3}, new int[]{-5,-2,10,-3,7}, 6 );
        assertEquals(want, got);
	}

}
