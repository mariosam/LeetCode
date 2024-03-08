/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class BagOfTokensTest {

    @Test
	public void testBagOfTokens() throws Exception {
        //Test 1
        int want = 0;
        int got = BagOfTokens.bagOfTokensScore( new int[]{100}, 50 );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = BagOfTokens.bagOfTokensScore( new int[]{200,100}, 150 );
        assertEquals(want, got);
        //Test 3
        want = 2;
        got = BagOfTokens.bagOfTokensScore( new int[]{100,200,300,400}, 200 );
        assertEquals(want, got);
	}

}
