/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class PredictTheWinnerTest {

    @Test
	public void testPredictTheWinner() throws Exception {
        //Test 1
        boolean want = false;
        boolean got = PredictTheWinner.predictTheWinner( new int[]{1,5,2} );
        assertEquals(want, got);
        //Test 2
        want = true;
        got = PredictTheWinner.predictTheWinner( new int[]{1,5,233,7} );
        assertEquals(want, got);
	}

}
