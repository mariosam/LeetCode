/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class DivideArrayIntoEqualPairsTest {

    @Test
	public void testDivideArrayIntoEqualPairs() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = DivideArrayIntoEqualPairs.divideArray( new int[]{3,2,3,2,2,2} );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = DivideArrayIntoEqualPairs.divideArray( new int[]{1,2,3,4} );
        assertEquals(want, got);
	}

}
