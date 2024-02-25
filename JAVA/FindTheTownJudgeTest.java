/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindTheTownJudgeTest {

    @Test
	public void testFindTheTownJudge() throws Exception {
        //Test 1
        int want = 2;
        int got = FindTheTownJudge.findJudge( 2, new int[][]{{1,2}} );
        assertEquals(want, got);
        //Test 2
        want = 3;
        got = FindTheTownJudge.findJudge( 3, new int[][]{{1,3},{2,3}} );
        assertEquals(want, got);
        //Test 3
        want = -1;
        got = FindTheTownJudge.findJudge( 3, new int[][]{{1,3},{2,3},{3,1}} );
        assertEquals(want, got);
	}

}
