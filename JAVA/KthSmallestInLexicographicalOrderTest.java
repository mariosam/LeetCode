/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class KthSmallestInLexicographicalOrderTest {

    @Test
	public void testKthSmallestInLexicographicalOrder() throws Exception {
        //Test 1
        int want = 10;
        int got = KthSmallestInLexicographicalOrder.findKthNumber( 13, 2 );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = KthSmallestInLexicographicalOrder.findKthNumber( 1, 1 );
        assertEquals(want, got);
	}

}
