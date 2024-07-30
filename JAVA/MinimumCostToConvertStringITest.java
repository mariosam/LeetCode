/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumCostToConvertStringITest {

    @Test
	public void testMinimumCostToConvertStringI() throws Exception {
        //Test 1
        long want = 28;
        long got =  MinimumCostToConvertStringI.minimumCost( "abcd", "acbe", new char[]{'a','b','c','c','e','d'}, new char[]{'b','c','b','e','b','e'}, new int[]{2,5,5,1,2,20} );
        assertEquals(want, got);
        //Test 2
        want = 12;
        got =  MinimumCostToConvertStringI.minimumCost( "aaaa", "bbbb", new char[]{'a','c'}, new char[]{'c','b'}, new int[]{1,2} );
        assertEquals(want, got);
        //Test 3
        want = -1;
        got =  MinimumCostToConvertStringI.minimumCost( "abcd", "abce", new char[]{'a'}, new char[]{'e'}, new int[]{10000} );
        assertEquals(want, got);
	}

}
