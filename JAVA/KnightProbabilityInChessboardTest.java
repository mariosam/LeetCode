/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class KnightProbabilityInChessboardTest {

    @Test
	public void testKnightProbabilityInChessboard() throws Exception {
        //Test 1
        double want = 0.06250;
        double got = KnightProbabilityInChessboard.knightProbability( 3, 2, 0, 0 );
        assertEquals(got, want, got);
        //Test 2
        want = 1.00000;
        got = KnightProbabilityInChessboard.knightProbability( 1, 0, 0, 0 );
        assertEquals(want, got, want);
	}

}
