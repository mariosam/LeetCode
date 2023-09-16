/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumLengthOfPairChainTest {

    @Test
	public void testMaximumLengthOfPairChain() throws Exception {
        //Test 1
        int want = 2;
        int got = MaximumLengthOfPairChain.findLongestChain( new int[][]{{1,2},{2,3},{3,4}} );
        assertEquals(want, got, 0);
        //Test 2
        want = 3;
        got = MaximumLengthOfPairChain.findLongestChain( new int[][]{{1,2},{7,8},{4,5}} );
        assertEquals(want, got, 0);
	}

}
