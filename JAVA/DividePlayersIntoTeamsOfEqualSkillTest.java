/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class DividePlayersIntoTeamsOfEqualSkillTest {

    @Test
	public void testDetermineIfTwoStringsAreClose() throws Exception {
        //Test 1
        long want = 22;
        long got = DividePlayersIntoTeamsOfEqualSkill.dividePlayers( new int[]{3,2,5,1,3,4} );
        assertEquals(want, got);
        //Test 2
        want = 12;
        got = DividePlayersIntoTeamsOfEqualSkill.dividePlayers( new int[]{3, 4} );
        assertEquals(want, got);
        //Test 3
        want = -1;
        got = DividePlayersIntoTeamsOfEqualSkill.dividePlayers( new int[]{1, 1, 2, 3} );
        assertEquals(want, got);
	}

}
